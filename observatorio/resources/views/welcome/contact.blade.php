<div id="contact" class="jumbo-contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
              <div class="page-header text-center">
                  <h1>{{ trans('app.head.contact') }}</h1>
              </div>
          </div>
      </div>
    <div class="row">
      <div class="col-sm-8  col-sm-offset-2">
        <form id="contact-form" method="post" action="{{ url('contact') }}">
          {!! csrf_field() !!}

          <div class="form-group"><div class="col-md-12" id="contact-alert"></div></div>

          <div class="form-group">
            <div class="col-md-12"><input class="form-control" name="name" type="text" placeholder="{{ trans('app.contact.name') }}"></div>
          </div>

          <div class="form-group">
            <div class="col-md-6"><input class="form-control" name="email" type="email" placeholder="{{ trans('app.form.email') }}"></div>
            <div class="col-md-6">
              <select class="form-control" name="reason" required="true">
                <option value="Suggestion">{{ trans('app.contact.suggestion') }}</option>
                <option value="Doubts">{{ trans('app.contact.doubts') }}</option>
                <option value="Other">{{ trans('app.contact.other') }}</option>
              </select>
            </div>
          </div>

		  <div class="form-group">
            <div class="col-md-12"><input class="form-control" name="subject" type="text" placeholder="{{ trans('app.contact.subject') }}"></div>
          </div>

          <div class="form-group">
            <div class="col-md-12"><textarea class="form-control" name="body" placeholder="{{ trans('app.contact.message') }}"></textarea></div>
          </div>

          <div class="form-group">
            <div class="col-md-12"><input id="contact-send" class="btn btn-default btn-readmore-blue" type="submit" value="{{ trans('app.btn.submit') }}"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
