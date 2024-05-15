<!DOCTYPE html>
<html>

<head>
    <title>Title</title>
</head>

<body>
    <p>Доброго времени суток {{ $user->name }}! Запис на {{ $date }} {{ $time }}</p>

    <br>

    <p>
        Услуга: {{ $service->name }}. <br> Кабинет: {{ $service->parlor }}.
        <br> Цена: {{ $service->price }} ₸. <br> Доктор: {{ $doctor->name }}.
    </p>

</body>

</html>
