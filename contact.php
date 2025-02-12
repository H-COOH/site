<?php
session_start();
require_once "dat.php";

$url="https://www.google.com/recaptcha/api/siteverify?secret=".urlencode(secret_key).'&response='.urlencode($_POST["g-recaptcha-response"]);
$human=json_decode(file_get_contents($url))->success;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<meta content="何一霆的联系方式" name="description">
	<meta content="何一霆,联系方式" name="keywords">
	<title>联系方式</title>
	<script src="https://recaptcha.net/recaptcha/api.js" async defer></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top p-3">
	<div class="container-fluid">
		<a class="navbar-brand text-xl" href="./">何一霆的个人主页</a>
		<div class="collapse navbar-collapse text-lg" id="navbarText">
			<ul class="navbar-nav ms-auto me-2">
				<li class="nav-item">
					<a class="nav-link" href="./">个人简介</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="./contact.php">联系方式</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./friends.php">友情链接</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="container-fluid p-5">
	<h3 class="mb-4">联系方式</h3>
	<p class="mb-4"><b>推荐使用邮件：contact@mzxr.top</b></p>
	<pre>-----BEGIN PGP PUBLIC KEY BLOCK-----

xjMEZNJfsBYJKwYBBAHaRw8BAQdARNzfVsWtNG4F3/pEtd2FGUzvwAIMBmwi
jqfu/cty70XNFU1pIDxjb250YWN0QG16eHIudG9wPsKtBBAWCgA+BYJk0l+w
BAsJBwgJkKVJM5nhUfEkAxUICgQWAAIBAhkBApsDAh4BFiEEr6hknAHEqUyp
oQ/8pUkzmeFR8SQAIQkQpUkzmeFR8SQWIQSvqGScAcSpTKmhD/ylSTOZ4VHx
JFphAP9Zz+QnQAUAZFCK2J1hgAyh8xaKcZn8zb0pBL6uHZFV2QEAwZSLKb5W
FjnzpCP91kUCL8YPN0zVBWMtJXUD98VkpgDOOARk0l+wEgorBgEEAZdVAQUB
AQdA2LZML/unLRNSSArjZmcuWzO1tsaUYhwGXcuHlNzuIwwDAQgHwpkEGBYI
ACoFgmTSX7AJkKVJM5nhUfEkApsMFiEEr6hknAHEqUypoQ/8pUkzmeFR8SQA
IQkQpUkzmeFR8SQWIQSvqGScAcSpTKmhD/ylSTOZ4VHxJAc+AP4hThHh5nn5
6OO9P1zXPiQHvj+6UD68JlLJ3VV3owQaigEAhusKERm2dUq3Qi1t9E32ZfjA
qV/P9ty0czsLpAQg0gY=
=R8D4
-----END PGP PUBLIC KEY BLOCK-----
</pre>
	<?php
	echo $human?"<p class='mb-4'><b>我的QQ：2083502261（谜之仙人）</b></p>":"<form id='form' method='post'>
		<button class='btn btn-primary g-recaptcha' data-sitekey='".site_key."' data-callback='submit'>显示我的QQ</button></form>"
	?>
</div>
</body>
<style>
	pre
	{
		width:fit-content;
		padding:10px;
		margin-bottom:30px;
		line-height:1.42;
		color:#444;
		background-color:#F5F5F5;
		border:1px solid #ccc;
		border-radius:4px;
	}
</style>
<script>
	function submit()
	{document.getElementById("form").submit();}
</script>
</html>