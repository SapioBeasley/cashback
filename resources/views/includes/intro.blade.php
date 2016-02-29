<div class="container">
	<div class="row">
		<div class="col-md-12 dark-bg">
			<div class="slogan">
				<h1>Get up to $25,000 <b>Cash Back</b></h1>
				<p><b>Find your new dream home &amp; get 2% of Sale Price Back up to $25,000! <br>
					This EXCLUSIVE new home stimulus program is only available here. Act Now!</b></p>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<div class="form-container">
				<h3 class="title">Find out More Here</h3>
				{!! Form::open(['route' => 'mail', 'required']) !!}
					<div class="form-group">
						{!! Form::text('name', null, ['class' => 'form-control',  'id' => 'contact_name', 'placeholder' => 'Full name', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('email', null, ['class' => 'form-control',  'id' => 'contact_email', 'placeholder' => 'Email', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('phone', null, ['class' => 'form-control',  'id' => 'contact_phone', 'placeholder' => 'Phone', 'required']) !!}
					</div>
						{!!Form::submit('Get Started', ['class' => 'btn btn-lg btn-block btn-primary']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
