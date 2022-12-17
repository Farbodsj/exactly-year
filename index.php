<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-color:MintCream">
<div class="container">
    <div class="card nt-5"> <br>
        <div class="card-header" style="text-align: center;font-size: 20pt">محاسبه سن دقیق</div>
        <form action="/date-to-year/convert.php" method="post">
            <div class="mb-3">
                <label for="year" class="form-label"> سال تولد شمسی </label>
                <input type="number" id="year" class="form-control" name="year" placeholder=" سال تولد شمسی خود را وارد کنید مثال : 1373 ">
            </div> <br>
            <div class="mb-3">
                <label for="month" class="form-label"> ماه تولد شمسی </label>
                <input type="number" id="month" class="form-control" name="month" placeholder=" عدد ماه تولد شمسی خود را وارد کنید مثال : 10 ">
            </div> <br>
            <div class="mb-3">
                <label for="day" class="form-label"> روز تولد شمسی </label>
                <input type="number" class="form-control" id="day" name="day" placeholder=" روز تولد شمسی خود را وارد کنید مثال : 27 ">
            </div> <br>
            <div class="mb-3">
                <label for="hour" class="form-label"> ساعت تولد </label>
                <input type="number" class="form-control" id="hour" name="hour" placeholder=" ساعت تولد خود را وارد کنید مثال : 9 ">
            </div> <br>
            <div class="mb-3">
                <label for="minute" class="form-label"> دقیقه تولد </label>
                <input type="number" id="minute" name="minute" class="form-control"  placeholder=" دقیقه تولد خود را وارد کنید مثال : 30">
            </div> <br>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">کلیک کنید</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
