<!DOCTYPE html>
<html>

<head>
    <title>ایمیل تستی</title>
</head>

<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <h2 style="color: #3498db;">ایمیل تستی از {{ config('app.name') }}</h2>

        <p>سلام،</p>

        <p>این یک ایمیل تستی از سرویس Mailtrap است.</p>

        <div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;">
            <p><strong>جزئیات ارسال:</strong></p>
            <ul>
                <li>تاریخ: {{ now()->format('Y-m-d H:i:s') }}</li>
                <li>اپلیکیشن: {{ config('app.name') }}</li>
                <li>محیط: {{ app()->environment() }}</li>
            </ul>
        </div>

        <p>اگر این ایمیل را دریافت می‌کنید، تنظیمات Mailtrap به درستی انجام شده است.</p>

        <hr style="margin: 30px 0;">

        <footer style="color: #6c757d; font-size: 12px;">
            <p>این یک ایمیل اتوماتیک است. لطفاً به آن پاسخ ندهید.</p>
        </footer>
    </div>
</body>

</html>
