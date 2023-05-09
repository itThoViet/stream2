<!DOCTYPE html>
<html>
<head>
	<title>Chat App</title>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	<style type="text/css">
		*,
		*::before,
		*::after {
		  box-sizing: border-box;
		}
		html,
		body {
		  height: 100%;
		}
		body {
		  background: linear-gradient(135deg, #4b958e, #2a7561);
		  background-size: cover;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 14px;
		  line-height: 1.3;
		  overflow: hidden;
		}
	</style>
	<?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
	<div id="app">
		<chat-layout></chat-layout>
		<script src="http://localhost:6001/socket.io/socket.io.js"></script>
	</div>
</body>
</html>
<?php /**PATH E:\2023\05-2023\socketDataStream\resources\views/chat.blade.php ENDPATH**/ ?>