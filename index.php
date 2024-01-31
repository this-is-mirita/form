<?php
include 'Applications/AMPPS/www/infoForm/php/getForm.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="d-flex justify-content-start">
                <div class="btn btn-primary btn-square mr-2" style="width: 50px; height: 50px;">
                    <span class="fas fa-user-cog">
                        <a href="admin.php">.</a>
                    </span>
                </div>
                <form class="center" method="post" action="php/getForm.php">
                    <h3>Форма для заполнения ваших данных</h3>
                    <p>Заполните эту форму, чтобы предоставить нам информацию о себе. <br>
                        Пожалуйста, введите ваше имя, электронную почту, телефон и другие данные в соответствующие поля. <br>
                        После заполнения формы, нажмите кнопку "Отправить", чтобы отправить нам вашу информацию.<br>
                        Благодарим вас за заполнение формы!
                    </p>
                    <div class="form-group mt-2">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control form-control-square" name="Name" id=""
                            placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Электронная почта</label>
                        <input type="email" class="form-control form-control-square" name="Email" id=""
                            placeholder="Введите вашу электронную почту">
                    </div>
                    <div class="form-group mt-2">
                        <label for="phone">Телефон</label>
                        <input type="tel" class="form-control form-control-square" name="Telephone" id=""
                            placeholder="Введите ваш номер телефона">
                    </div>
                    <div class="form-group mt-2">
                        <label for="address">Адрес</label>
                        <input type="text" class="form-control form-control-square" name="Address" id=""
                            placeholder="Введите ваш адрес">
                    </div>
                    <div class="form-group mt-2">
                        <label for="education">Образование</label>
                        <input type="text" class="form-control form-control-square" name="Education" id=""
                            placeholder="Введите ваше образование">
                    </div>
                    <div class="form-group mt-2">
                        <label for="experience">Опыт работы</label>
                        <input type="text" class="form-control form-control-square" name="Experience" id=""
                            placeholder="Введите ваш опыт работы">
                    </div>
                    <div class="form-group mt-2">
                        <label for="skills">Навыки</label>
                        <input type="text" class="form-control form-control-square" name="Skills" id=""
                            placeholder="Введите ваши навыки">
                    </div>
                    <div class="form-group mt-2">
                        <label for="hobbies">Хобби</label>
                        <input type="text" class="form-control form-control-square" name="Hobby" id=""
                            placeholder="Введите ваши хобби">
                    </div>
                    <div class="form-group mt-2">
                        <label for="message">Сообщение</label>
                        <textarea class="form-control form-control-square" id="" name="Message" rows="3"
                            placeholder="Введите ваше сообщение"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button name="submit" class="btn btn-primary btn-square">Отправить</button>
                    </div>

                </form>


            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>