<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\LoginForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use ebestmall\web\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/login.css', ['depends' => EbmAsset::className()]);

$this->title = '登录';

?>
<div class="site-login">
    <div class="header-login">
        <div class="w">
            <div class="logo">
                <a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Html::encode($baseUrl) ?>/img/public/logo.png" alt=""></a>
                <span class="logo-salutatory">欢迎登陆</span>
                <div class="logo-link"><a href="javascript:;"><i class="icon-chat"></i>登录页面，调查问卷</a></div>
            </div>
        </div>
    </div>

    <div class="content-login" style="background-color: #323234;">
        <div class="w">
            <div class="content-activity">
                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/login-activity-001.jpg" alt=""></a>
            </div>
            <div class="content-login-form">
                <div class="content-login-form-header"><h3>账户登陆</h3></div>
                <div class="content-login-form-main">
                    <div class="msg-error"><i class="icon-error"> </i>账户名与密码不匹配，请重新输入</div>
                    <?php $form = ActiveForm::begin(['id' => 'form-login']); ?>
                        <div class="form-item">
                            <label for="loginform-username"><i class="icon-user"></i></label>
                            <input type="text" id="loginform-username" name="LoginForm[username]" placeholder="邮箱/用户名/已验证手机" autocomplete="off">
                        </div>
                        <div class="form-item">
                            <label for="loginform-password"><i class="icon-locked"></i></label>
                            <input type="password" id="loginform-password" name="LoginForm[password]" placeholder="密码">
                        </div>
                        <div class="form-checkbox">
                            <input type="checkbox" name="LoginForm[rememberMe]" value="1" checked="checked" id="loginform-checkbox">
                            <label for="loginform-checkbox">自动登录</label>
                            <a href="javascript:;">忘记密码</a>
                        </div>
                        <div class="form-btn">
                            <button type="submit">登&nbsp;&nbsp;录</button>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="content-login-form-footer">
                    <ul>
                        <li class="item"><span>|</span><a href="javascript:;"><i class="icon-qq"></i>QQ</a></li>
                        <li class="item"><span>|</span><a href="javascript:;"><i class="icon-wechat"></i>微信</a></li>
                        <li class="link"><a href="<?= Url::to(['site/register']) ?>"><i class="icon-chevron-circle-right"></i>立即注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-login">
        <div class="w">
            <ul>
                <li><span>|</span><a href="javascript:;">关于我们</a></li>
                <li><span>|</span><a href="javascript:;">联系我们</a></li>
                <li><span>|</span><a href="javascript:;">人才招聘</a></li>
                <li><span>|</span><a href="javascript:;">商家入驻</a></li>
                <li><span>|</span><a href="javascript:;">广告服务</a></li>
                <li><span>|</span><a href="javascript:;">友情链接</a></li>
                <li><span>|</span><a href="javascript:;">帮助中心</a></li>
            </ul>
            <p>Copyright © 2015 - 2017  eBestMall 鸿宇科技 版权所有</p>
        </div>
    </div>
</div>
