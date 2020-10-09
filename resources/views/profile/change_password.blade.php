
@include('common.header',['datas'=>$datas,'title' =>'Change Password','page'=>'password_account','parent_page'=>'Profile'])

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Password</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>You can change your password</p>
      </div>
  
          
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
       <form id='reset-form-data'>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="old-password">
              Old Password <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="password" id="old-password" placeholder="Old Password" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="new-password">
              New Password <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="password" id="new-password" placeholder="New Password" required="" class="gaccca-input" />
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="new-password-repeat">
              New Password Repeat <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="password" id="new-password-repeat" placeholder="New Password Repeat" required="" class="gaccca-input" />
            </div>
          </div>
        </div>
  
        <button class="gaccca-button-save gaccca-button-save-margin" id='reset-form'>Change Password</button>
          </form>
      </div>
  
   
   
    </div>

@include('common.footer')