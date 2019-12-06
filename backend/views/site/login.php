<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Outer Row -->
<div class="row justify-content-center site-login">

	<div class="col-xl-10 col-lg-12 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4"><?= Html::encode($this->title) ?> Admin</h1>
							</div>

							<?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'user']]); ?>
							<div class="form-group">
								<?= $form->field($model, 'username')->textInput(['class' => 'form-control form-control-user', 'placeholder' => 'Enter Email here..'])->label(false) ?>
							</div>
							<div class="form-group">
								<?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-user', 'placeholder' => 'Enter Password here..'])->label(false) ?>
							</div>
							<div class="form-group">
								<?= $form->field($model, 'rememberMe')->checkbox() ?>
							</div>
							<div class="form-group">
								<?= Html::submitButton(Yii::t('rbac-admin', 'Login'), ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
							</div>

							<hr>
							<div class="text-center">
								<p class="small text-gray-00">Forgot Password?
									<?= Html::a('reset it', ['user/request-password-reset']) ?></p>
							</div>
							<?php ActiveForm::end(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
