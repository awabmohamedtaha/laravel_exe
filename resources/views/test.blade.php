<form class="p-3 mt-3" action="/SignupSave" method="POST">
                           {{ csrf_field() }}
                        <div class="form-field d-flex align-items-right"><input type="text" name="marketed_name" placeholder="الاســم" autofocus required maxlength="21" onselectstart="return false" ondragstart="return false" onkeypress="return(KeyPressOrder(this,event))" onkeydown="(KeyPressOrder(this,event))"><span class="far fa-user icoo"></span></div>
                            <div class="form-field d-flex align-items-right"><input type="text" name="marketed_hwya" placeholder="رقم الهوية / الإقامة" required maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"> <span class="far fa-address-card icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="text" name="marketed_phone" placeholder="رقم الجوال" required maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"> <span class="fas fa-phone-volume icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="password" name="marketed_password" placeholder="كلمة المرور" required> <span class="fas fa-key icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="password" name="marketed_repassword" placeholder="إعادة كلمة المرور" required> <span class="fas fa-key icoo"></span> </div>
                             <button type="submit" class="btn mt-3">تسجيــل</button>
                        </form>