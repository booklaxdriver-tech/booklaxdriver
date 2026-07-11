# BookLaxDriver 手机部署到 Hostinger

## 1. 上传网站包

1. 用手机浏览器登录 Hostinger。
2. 打开 **Websites / Hosting**，进入 BookLaxDriver 对应的主机。
3. 打开 **File Manager**。
4. 进入 `public_html`。
5. 先下载或重命名现有文件作为备份，不要直接覆盖无法恢复的内容。
6. 上传 `booklaxdriver-hostinger.zip`。
7. 选中 ZIP，点击 **Extract / 解压**。
8. 确认这些文件直接位于 `public_html` 根目录，而不是多套一层文件夹：
   - `index.html`
   - `submit-booking.php`
   - `.htaccess`
   - `robots.txt`
   - `sitemap.xml`

正确路径：`public_html/index.html`

错误路径：`public_html/booklaxdriver-hostinger/index.html`

## 2. 配置 Slack Webhook

1. 在 Hostinger File Manager 打开 `public_html/submit-booking.php`。
2. 找到：

```php
$SLACK_WEBHOOK_URL = '';
```

3. 把 Slack Incoming Webhook URL 粘贴在单引号内并保存。
4. Webhook 属于私密凭据：只保存在 Hostinger 的 PHP 文件，不要放进 HTML、JavaScript、截图、聊天记录或公开 GitHub 仓库。

未填写 Webhook 时，PHP 会尝试把订单发送到 `booklaxdriver@gmail.com`。如果主机邮件功能也不可用，前端会显示预填好的邮件备用按钮。

## 3. 域名与测试

1. Namecheap 的 DNS 应指向 Hostinger 当前提供的主机目标；不要使用记忆中的旧 IP。
2. 在 Hostinger 中确认 `booklaxdriver.com` 已绑定到此 hosting 网站并启用 SSL。
3. 打开 `https://booklaxdriver.com/`，确认首页正常。
4. 用虚构测试资料提交一次预约。
5. 确认页面显示订单参考编号和摘要。
6. 确认 Slack 收到消息；未配置 Slack 时，确认 Gmail 收到备用邮件。
7. 测试手机上的 Call、Email、Request a quote 按钮。
8. 不要在测试中填写真实卡号、密码、验证码或银行资料。

## 4. GitHub 备份

GitHub 只保存无密钥源码。备份前把 `$SLACK_WEBHOOK_URL` 恢复为空字符串。真实 Webhook 只留在 Hostinger 生产文件中。
