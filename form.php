<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/emp.css">
    <script src="js/search.js"></script>
    <title>مشروع ادخال بيانات الموظفين</title>
</head>

<body>

    <div class="container text-center">
        <div class="mb-6  g-3 row justify-content-center">
            <div class="col-lg-4">

                <form method="POST" action="add.php">

                    <div class=" mb-2  row   justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">الاسم الاول</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control form-control-lg" type="text" name="firstname" required>
                        </div>
                    </div>


                    <div class=" mb-2  row   justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">الاسم الثاني</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control form-control-lg" type="text" name="lastname" required>
                        </div>
                    </div>


                    <div class=" mb-1 g-5 row  align-items-center justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">العنوان </label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control form-control-lg" type="text" name="addr" required>
                        </div>
                    </div>



                    <div class=" mb-1 g-5 row  align-items-center justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">العمر </label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control form-control-lg" type="number" name="age" required>
                        </div>
                    </div>


                    <div class=" mb-1 g-5 row  align-items-center justify-content-center">

                        <div class="col-auto">
                            <label class="col-form-label">الجنس</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">

                            <select class="form-select form-select-lg " name="sex">
                                <option>ذكر</option>
                                <option>إنثى</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-outline-primary btn-lg">إضافه</button>
                    <a class="btn btn-outline-warning btn-lg" href="search.php" role="button">بحث</a>

                    <a href="print_pdf.php" class="btn btn-outline-success   pull-right" role="button">
                        <span class="glyphicon glyphicon-print"></span> PDF</a>

                </form>


            </div>
        </div>
    </div>


</body>

</html>
