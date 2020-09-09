@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Create Your Resume</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p> Just a few more steps left! </p>

      <p> To get an idea of what a simple but good video and profile look like, please check out the following link: <a
          href="#"> Sample Template</a> </p>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <h2 class="gaccca-h2-padding">Attachments</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
        </div>
        <div class="gaccca-form-element gaccca-form-element-margin">
          <table class="gaccca-price-table">
            <tr>
              <td>2020-04-02.png</td>
              <td>
                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                <a href="#"><i class="fas fa-external-link-alt"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>2020-04-02.png</td>
              <td>
                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                <a href="#"><i class="fas fa-external-link-alt"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </td>
            </tr>

          </table>
        </div>
      </div>

      <h2 class="gaccca-h2-padding">Preview</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Select the Template Design <span class="gaccca-text-required" title="required">*</span> </label>
            <span class="gaccca-radio">
              <input type="radio" id="radio-one" value="radio-one" name="default" checked="" />
              <label class="gaccca-radio__label" for="radio-one">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">one</span>
              </label>

              <input type="radio" id="radio-two" value="radio-two" name="default" />
              <label class="gaccca-radio__label" for="radio-two">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">two</span>
              </label>


              <input type="radio" id="radio-three" value="radio-three" name="default" />
              <label class="gaccca-radio__label" for="radio-three">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">three</span>
              </label>

              <label class="gaccca-radio__label" for="radio-three">
                <a href="#">Preview</a>
              </label>


            </span>

          </div>

        </div>

      </div>


    </div>

  </div>

{!! Form::close() !!}
@include('common.footer')