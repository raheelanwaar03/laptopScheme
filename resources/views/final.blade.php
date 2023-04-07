<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Final Page</title>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row w-100">
            <div class="col-md-12 text-center">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/second.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <x-alert />
                        <h5 class="card-title">تصدیق کریں</h5>
                        <p class="card-text">
                            آپ نے تمام سوالات کو پاس کر لیا ہے۔ابھی اس 03431600577 ایزی پیسہ نمبر پر موبائل دیکھنے کے
                            لیے ہمیں 100 روپے اور لیپ ٹاپ کے لیے 50 روپے بھیجیں۔اور پھر نیچے دیے گئے فیلڈ میں ٹرانزیکشن
                            آئی ڈی درج کریں اور جمع کرائیں پر کلک کریں۔ ہم آپ کو اس نمبر پر تصدیقی مسیج بھیجیں گے جہاں
                            سے آپ ہمیں رقم بھیجیں گے کہ آپ کیا جیتتے ہیں۔
                        </p>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('User.Final.Store') }}" method="POST">
                            @csrf
                            <div class="">
                                <label for="">نام</label>
                                <input type="text" name="name" placeholder="نام" class="form-control">
                            </div>
                            <div class="">
                                <label for="">ٹرانزیکشن آئی ڈی</label>
                                <input type="text" name="tid" placeholder="ٹرانزیکشن آئی ڈی"
                                    class="form-control">
                            </div>
                            <button class="btn btn-block btn-primary mt-4">جمع کرائیں</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
