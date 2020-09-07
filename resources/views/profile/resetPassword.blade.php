
@include('common.header_without_menu')

<div class="gaccca-main-containt">
            
            
            <h2 class="gaccca-h2-padding">Reset Password</h2>
            
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                 <form id='reset-form-data'>
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    
                    <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Password <span class="gaccca-text-required" title="required">*</span>  </label>
                        <div class="gaccca-form-element__control">
                            <input type="password"  id="password" required="" class="gaccca-input" />
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    
                    <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-3">
                            Confirm Password <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                            <input type="password" id="confirmPassword" required="" class="gaccca-input" />
                            
                            
                        </div>
                    </div>
                </div>
                </form>
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    
                    <div class="gaccca-form-element gaccca-form-element-margin">
                        
                        <button class="gaccca-button-save "  id='resetPassBtnSet'>Reset</button>
                        
                    </div>
                </div>
            </div>
            </div>
         <div class="gaccca-loader-div" id='loader' style='display:none'>
            <div class="gaccca-loader"></div>
        </div>
        <script>var codeGlobal='{{$oobCode}}';</script>
        <script src="{{ asset('js/accountAuth.js') }}"></script>

    </body>
    </html>