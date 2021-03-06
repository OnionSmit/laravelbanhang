
{{-- Validate FORM --}}
@foreach ($errors->all() as $error)
    <div class='alert alert-danger'>{{$error}}</div>
@endforeach
{{-- edit infomation User --}}
<?php
    $editUserCorrect  = Session::get('EditUserCorrect');
    if($editUserCorrect){
        echo "<div class='alert alert-success'>".$editUserCorrect."</div>";
        session::put('EditUserCorrect', Null);
    }
    $editUserError  = Session::get('EditUserError');
    if($editUserError){
        echo "<div class='alert alert-danger'>".$editUserError."</div>";
        session::put('EditUserError', Null);
    }
?>
{{-- remove Role of user  --}}
<?php
    $removeRoleUser  = Session::get('removeRoleUser');
    if($removeRoleUser){
        echo "<div class='alert alert-success'>".$removeRoleUser."</div>";
        session::put('removeRoleUser', Null);
    }
?>

{{-- remove Permission --}}
<?php
    $removePermissionRole  = Session::get('RemovePermissionRoleCorrect');
    if($removePermissionRole){
        echo "<div class='alert alert-success'>".$removePermissionRole."</div>";
        session::put('RemovePermissionRoleCorrect', Null);
    }
?>
{{-- edit permission --}}
<?php
    $messageEditPermissionCorrect = Session::get('editPermissionCorrect');
    if($messageEditPermissionCorrect){
        echo "<div class='alert alert-success'>".$messageEditPermissionCorrect."</div>";
        session::put('editPermissionCorrect', Null);
    }
?>
{{-- edit role --}}
<?php
    $messageEditRoleCorrect = Session::get('editRoleCorrect');
    if($messageEditRoleCorrect){
        echo "<div class='alert alert-success'>".$messageEditRoleCorrect."</div>";
        session::put('editRoleCorrect',Null);
    }
?>
{{--add Roles of User --}}
<?php
    $messageAddRolesUserError = Session::get('RoleOfUserError');
    if($messageAddRolesUserError){
        echo "<div class='alert alert-danger'>".$messageAddRolesUserError."</div>";
        session::put('RoleOfUserError',Null);
    }
?>
<?php
    $messageAddRolesUserCorrect = Session::get('RoleOfUserCorrect');
    if($messageAddRolesUserCorrect){
        echo "<div class='alert alert-success'>".$messageAddRolesUserCorrect."</div>";
        session::put('RoleOfUserCorrect',Null);
    }
?>
{{--add PermissionToRole --}}
<?php
    $messageAddRolePermissionEr = Session::get('AddRoleToPermissionError');
    if($messageAddRolePermissionEr){
        echo "<div class='alert alert-danger'>".$messageAddRolePermissionEr."</div>";
        session::put('AddRoleToPermissionError',Null);
    }
?>
<?php
    $messageAddRolePermissionCr = Session::get('AddRoleToPermissionCorrect');
    if($messageAddRolePermissionCr){
        echo "<div class='alert alert-success'>".$messageAddRolePermissionCr."</div>";
        session::put('AddRoleToPermissionCorrect',Null);
    }
?>

{{-- Category --}}
<?php
    $messageAddCate = Session::get('AddCategoryCorrect');
    if($messageAddCate){
        echo "<div class='alert alert-success'>".$messageAddCate."</div>";
        session::put('AddCategoryCorrect',Null);
    }
?>
<?php
    $messageEditCate = Session::get('EditCategoryCorrect');
    if($messageEditCate){
        echo "<div class='alert alert-success'>".$messageEditCate."</div>";
        session::put('EditCategoryCorrect',Null);
    }
?>

{{-- Brand --}}
<?php
    $messageAddBrand = Session::get('AddBrandCorrect');
    if($messageAddBrand){
        echo "<div class='alert alert-success'>".$messageAddBrand."</div>";
        session::put('AddBrandCorrect',Null);
    }
?>
<?php
$messageEditBrand = Session::get('EditBrandCorrect');
if($messageEditBrand){
    echo "<div class='alert alert-success'>".$messageEditBrand."</div>";
    session::put('EditBrandCorrect',Null);
}
?>

{{-- product --}}
<?php
    $messageAddProduct = Session::get('AddProductCorrect');
    if($messageAddProduct){
        echo "<div class='alert alert-success'>".$messageAddProduct."</div>";
        session::put('AddProductCorrect',Null);
    }
?>

<?php
$messageEditProduct = Session::get('EditProductCorrect');
if($messageEditProduct){
    echo "<div class='alert alert-success'>".$messageEditProduct."</div>";
    session::put('EditProductCorrect',Null);
}
?>
{{-- News --}}
<?php
    $messageAddNews = Session::get('AddNewsCorrect');
    if($messageAddNews){
        echo "<div class='alert alert-success'>".$messageAddNews."</div>";
        session::put('AddNewsCorrect',Null);
    }
?>

<?php
$messageEditNews = Session::get('EditNewsCorrect');
if($messageEditNews){
    echo "<div class='alert alert-success'>".$messageEditNews."</div>";
    session::put('EditNewsCorrect',Null);
}
?>
{{-- Slider --}}
<?php
    $messageAddSlider = Session::get('AddSliderCorrect');
    if($messageAddSlider){
        echo "<div class='alert alert-success'>".$messageAddSlider."</div>";
        session::put('AddSliderCorrect',Null);
    }
?>

<?php
$messageEditSlider = Session::get('EditSliderCorrect');
if($messageEditSlider){
    echo "<div class='alert alert-success'>".$messageEditSlider."</div>";
    session::put('EditSliderCorrect',Null);
}
?>



