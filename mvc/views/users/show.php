<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> CRUD MVC (Show User) </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
	<style>
		body {
			font-family: 'Muli', sans-serif;
			font-weight: 200;
		}
	</style>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center"> <i class="fa fa-users"></i> CRUD MVC</h1>
				<hr>
                <h2> <i class="fa fa-search"></i> Show User</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Show User</li>
                </ol>
                <table class="table table-striped table-dark">
                    <?php foreach($data as $user): ?>
                        <tr>
                            <th> Id: </th>
                            <td> <?php echo $user['id']; ?> </td>
                        </tr>
                        <tr>
                            <th> FirstName: </th>
                            <td> <?php echo $user['firstName']; ?> </td>
                        </tr>
                        <tr>
                            <th> LastName: </th>
                            <td> <?php echo $user['lastName']; ?> </td>
                        </tr>
                        <tr>
                            <th> Email: </th>
                            <td> <?php echo $user['email']; ?> </td>
                        </tr>
                        <tr>
                            <th> PhoneNumber: </th>
                            <td> <?php echo $user['phoneNumber']; ?> </td>
                        </tr>
                        <tr>
                            <th> Address: </th>
                            <td> <?php echo $user['address']; ?> </td>
                        </tr>
                    <?php endforeach ?>
                </table>
			</div>
		</div>
	</div>	
</body>
</html>