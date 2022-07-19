@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <br>
                <h1 style="text-align:center ; color:#3b8af2">انشاء مستخدم جديد </h1>

                <div class="card-body">
                    <form method="get" action="{{ route('tackit_up') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">اسم المستخدم</label>
                              @isset(Auth::user()->name)
                                <input name="namee" type="text" class="form-control" @error('name') is-invalid @enderror value="{{ Auth::user()->name}}" required autocomplete="name" id="exampleInputEmail1" aria-describedby="emailHelp">


                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">



                            <label for="exampleInputEmail1" class="form-label">الايميل</label>

                            <div class="col-md-12">
                                <input id="email" name="email" type="email" class="form-control" @error('email') is-invalid @enderror value="{{ auth::User()->email }}" required autocomplete="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <input hidden="hidden" id="interger" name="userid" type="number" class="form-control" @error('email') is-invalid @enderror value="{{ auth::User()->id }}" required autocomplete="email" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="form-label">الخدمات</label>


                            <div class="col-md-12">
                                <select name="servesses" class="form-select" aria-label="Default select example">
                                    <option selected>الرجاء اختيار الخدمة</option>
                                    <option value="تصميم هوية الكترونية">تصميم هوية الكترونية</option>
                                    <option value="تصميم مواقع الكترونية">تصميم مواقع الكترونية</option>
                                    <option value="تصميم متاجر إلكترونية">تصميم متاجر إلكترونية</option>
                                    <option value="نظام محاسبي">نظام محاسبي</option>
                                    <option value="نظام اداري">نظام اداري</option>
                                    <option value="نظام ارشفة">نظام ارشفة</option>
                                    <option value="انظمة المخزون"> انظمة المخزون</option>
                                    <option value=" تطبيقات جوال"> تطبيقات جوال</option>
                                    <option value="التسويق الشبكي">التسويق الشبكي </option>


                                </select>



                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="form-label"> رقم الجوال </label>


                            <div class="col-md-12">
                                <input id="phone" name="phone" type="phone" class="form-control" @error('phone') is-invalid @enderror"  required autocomplete="new-password">


                            </div>
                        </div>
                        <br> <br>
                        <div class="form-group row mb-0">
                            <div style="text-align: center">

                                <button type="submit" class="btn btn-primary">فتح تذكرة</button>


                                    <a href="{{ route('tackit_view') }}"> <button type="button" class="btn btn-success">التذاكر السابقة</button></a>


                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
