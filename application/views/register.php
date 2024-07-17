<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <section class="mt-5">
    <h2>Register</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('blog/register'); ?>
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Register</button>
    </form>
    </section>
</body>
</html>
