<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <h1> Calculadora </h1>
</head>

<body>
    <form method="get" action="calcu.php">
        <input type="text" name="Num1">
        <select name="signo">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
        <input type="text" name="Num2">
        <input type="submit" value="enviar">
    </form>
</body>
</html>