@include ('errors.list')

{!! Form::open([
'route' => 'posts.store']) !!}

<paper-card id="my-card" heading="Post it">
    <div class="card-content">
        <div class = "form-group">
            {!! Form::textarea('body', null, ['size' => '150x3', 'placeholder' => 'What do you have to share?',
            'class'=>'form-control']) !!}
        </div>
    </div>
    <div class="card-actions">
        {!! Form::submit ('Submit', ['class' => 'btn btn-success']) !!}
        <paper-fab id="my-button-success" mini icon="favorite">
            <dom-module>

            </dom-module>
        </paper-fab>
    </div>
</paper-card>

{!! Form::close() !!}