@if(!Session::get('sess_id'))
<script>
	window.location='login';
</script>
@endif

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">

<!-- Fav Icon  -->

<link rel="shortcut icon" href="assets/images/favicon.png">

<!-- Page Title  -->

<title><?php echo $title;?></title>

<!-- StyleSheets  -->

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="assets/css/dashlite.css">
<link id="skin-default" rel="stylesheet" href="assets/css/theme.css">

</head>