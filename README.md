# sendgrid-php-batch-email

Example application showing how to send batch emails in PHP. Useful for when you want to send 1,000s of custom emails in one fell swoop.

## Usage

```
php -f send.php
```

## Setup

```bash
touch .env
```

And paste in the following.

```
SENDGRID_USERNAME=yourusername
SENDGRID_PASSWORD=yourpassword
```

Then run composer.

```bash
composer install
```

Finally, run the file.

```
php -f send.php
```
