<div id="content-area_admin">
    <h2>Account manager</h2>
    <div id="content-list-admin">
        <div id="react-list-product">
            <div class="product-header__admin">
                <h5 class="username-account">USERNAME</h5>
                <h5 class="password-account">PASSWORD</h5>
                <h5 class="email-account">EMAIL</h5>
                <h5 class="action-account">ENABLE</h5>
            </div>
            <div id="container-product__admin">
                <!-- User list -->
                <?php
                    require_once('./../dbhelper.php');
                    $sql = "SELECT * FROM taikhoan";
                    $render_account = executeResult($sql);
                    foreach ($render_account as $account) {
                        echo '
                            <div class="product-list__admin">
                                <p class="username-account">' . $account['USERNAME'] . '</p>
                                <p class="password-account">' . $account['PASSWORD'] . '</p>
                                <p class="email-account">' . $account['EMAIL'] . '</p>
                                <div class="action-account">
                                    <input class="input-checked" onchange="handleCheckedUser('.$account['USERID'] .', '.$account['enable'].')" type="checkbox" '.($account['enable'] == 1 ? 'checked' : '').' />
                                </div>
                            </div>
                        ';
                    }
                ?>
                <!-- User list -->
            </div>
        </div>
    </div>
</div>

<script>
    const handleCheckedUser = (userid, enable) => {
        console.log('Userid: ', userid, 'enable: ', enable);
        $(document).ready(function() {
            $.ajax({
                url: 'enableAccount.php',
                type: 'POST',
                data: {
                    userid: userid,
                    enable: enable
                },
                success: function(data) {
                    window.location.reload();
                }
            })
        })
    }
</script>