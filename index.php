<?php
$data = include_once('datainfo.php');
$dataInfo_left = $data['about_left'];
$dataInfo_right = $data['about_right'];

$link = mysqli_connect("localhost", "cj14229_testdata", "xra6MSGu");
if ($link == false) {
    echo "Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error();
}
// else {
//     echo "Соединение установлено успешно";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/shortcut.ico">
    <title>Мое резюме</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="/js/slides.js"></script>
    <script type="text/javascript" src="/js/script.js" defer></script>
    <script type="text/javascript" src="/js/data_loader.js" defer></script>
</head>

<body>
    <div class="header">
        <h1>Моё резюме</h1>
        <h1 id="UserId">Пользователь: NoName</h1>
        <div class="menu">
            <ul class="horlist ulhorstyle">
                <li class="horlistitem"><a href="#info">Обо мне</a></li>
                <li class="horlistitem"><a href="#myachievements">Мои достижения</a></li>
                <li class="horlistitem"><a href="#contact">Мои контакты</a></li>
            </ul>
        </div>
    </div>
    <script>
        // let userName = prompt("Введите ваше имя");
        let userField = document.getElementById("UserId");
        userField.innerText = "Пользователь: " + userName;
    </script>

    <div class="visualeffects">
        <div class="slides">
            <ul class="slide-list">
                <!-- <li><img src="/images/screen.gif" alt="screen"></li> -->
                <li class="slideitem"><img src="/images/c-sharp-log.png" class="block" alt="картинка программирование">
                </li>
                <li class="slideitem"><img src="/images/python-logo.png" alt="картинка программирование"></li>
                <li class="slideitem"><img src="/images/java-logo.jpg" alt="картинка программирование"></li>
            </ul>
            <div class="slide-left"></div>
            <div class="slide-right"></div>
            <div class="slide-dots"></div>
            <script>
                new Sim()
            </script>
        </div>
        <div class="slides1">
            <div class="slide-zagl">
                <div>Это блок с информацией подтянутой из SQL</div>
                <hr />
                <div>
                    <table class="tabletest" border="1">
                        <caption>Вывод результатов запроса</caption>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>Comments</th>
                        </tr>
                        <?php
                        $selectQuery = 'select * from cj14229_testdata.Main';
                        $resultQuery = $link->query($selectQuery);
                        while ($row = $resultQuery->fetch_assoc()) {
                            echo "<tr><td>". $row['id']."</td><td>". $row['name']."</td><td>". $row['Comments']."</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div class="mysqlcontent"></div>
        </div>
    </div>




    <div class="container">
        <div class="photo">
            <button id="toggle-theme-btn">
                <img id="toggle-theme-image" src="images/Main_photo.png" atl="Главное фото">
                </img></button>
        </div>
        <div class="content">
            <p id="info">
            <div class="mainname">Гай Юлий Цезаревич</div>
            <div class="infoitem">
                <ul>
                    <?php
                    foreach ($dataInfo_left  as $value) {
                        echo '<li>' . $value . '</li>';
                    }
                    ?>
                </ul>
                <ul class="ulrightitem">
                    <?php
                    foreach ($dataInfo_right  as $value) {
                        echo '<li>' . $value . '</li>';
                    }
                    ?>
                </ul>
            </div>
            </p>
            <hr />
            <div id="myachievements">
            </div>
            <hr />
            <p id="contact">
                contact Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at consequatur minus provident
                ut. Nulla, sit? Voluptates quibusdam voluptatibus dolor non eius ipsa, est, quisquam nam illum odio
                perspiciatis dolore!
                Ex dolore provident quos ducimus, cum natus libero explicabo hic est vero quas, animi sit nostrum? Harum
                numquam dolores recusandae sed optio! Voluptas laborum asperiores ea? Atque delectus quia debitis.
                Illo repudiandae hic dicta! Natus laudantium, mollitia sit est similique dolor quasi doloribus optio
                ipsam cupiditate dignissimos, enim facilis! Reprehenderit, molestiae ab! Quod quia repudiandae
                recusandae doloribus facilis officiis ad.
                Dolorum nam aliquid enim provident blanditiis, neque mollitia ipsam, dolor dicta ipsa quasi architecto
                maiores expedita illo fugit nihil odio ex! Repellat nulla delectus facere doloribus rerum sequi, quos
                autem?
                Aliquam quis maxime in soluta ea, repellat iure qui dolorum eius veniam facere dolor aperiam commodi
                molestiae odit deserunt corrupti vel laudantium voluptate alias reiciendis ipsum. Cupiditate
                perspiciatis sunt quibusdam!
                Et, pariatur voluptatum alias consequuntur possimus ea sequi dolorum, ipsum mollitia quia omnis earum
                tempora, cum tempore repellat vero ab. Animi architecto cum veniam non ex corrupti perferendis quod
                quisquam!
                Aut, obcaecati architecto, provident quibusdam quaerat impedit perferendis natus officia labore minus
                deserunt perspiciatis, deleniti accusantium quo omnis. Impedit velit provident laudantium dolorum minus
                placeat quam cupiditate, quas assumenda hic?
                Dicta, quaerat deleniti. Atque eius dolorem quia optio quos doloribus officia iste, nihil totam,
                veritatis minima ipsam fugiat repudiandae dicta numquam itaque amet corporis sunt temporibus nam nobis
                id molestiae.
                Nostrum laudantium recusandae libero officia porro iure. Perferendis nulla eaque asperiores, dolore
                totam, dolorem quod eius ea illum dolores vitae amet aliquid architecto vel corrupti nam. Repudiandae
                labore debitis quaerat.
                Nihil, ratione. Animi omnis atque harum incidunt suscipit ducimus porro recusandae accusantium est
                doloremque quibusdam excepturi deleniti, placeat corporis facere! Et voluptatum praesentium neque nihil
                architecto, distinctio voluptate nostrum libero?
            </p>
        </div>
    </div>

    <div class="footer">
        <a class="leftlink" href="https://gb.ru">Это мой блог. Все права защищены (c)</a>
        <a class="rightlink" href="#top">Перейти вверх страницы</a>
    </div>
</body>

</html>