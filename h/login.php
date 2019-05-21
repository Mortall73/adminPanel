<?php include('./__head.php'); ?>
<body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
<div class="global-page-content">
    <main class="login-page">
        <div class="login-content">
            <div class="login-content__head">
                <div class="login-content__head-logo">
                    <img src="/static/img/icons/logo_b.png" alt="">
                </div>
                <p class="login-content__head-title">
                    alaska delivery
                </p>
            </div>
            <form action="#" name="login" method="post" enctype="multipart/form-data" class="login-form"
                  data-validate
            >
                <div class="form-block">
                    <p class="form-block__title">Логин</p>
                    <label class="form-block__input-wrap">
                        <input type="text" name="LOGIN" value="" class="form-block__input"
                               required
                               data-pristine-not-empty
                               data-pristine-required-message="Поле обязательно для заполнения"
                        >
                    </label>
                </div>
                <div class="form-block" data-is="pass-input">
                    <p class="form-block__title">Пароль</p>
                    <label class="form-block__input-wrap form-block__input-wrap--pass">
                        <input type="password" name="PASSWORD" value="" class="form-block__input"
                               required
                               data-pristine-not-empty
                               data-pristine-required-message="Поле обязательно для заполнения"
                        >
                        <i class="icon" data-change-type></i>
                    </label>
                </div>
                <button type="submit" class="btn">Войти</button>
            </form>
        </div>
    </main>
    <footer class="login-footer">
        <p>Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<?php include('./__footer.php'); ?>