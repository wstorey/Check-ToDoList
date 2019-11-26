{{ csrf_field() }}
<input name="name" placeholder="{{ $title }}" type="text" value="{{ $name ?? '' }}">
<button class="btn btn-primary" type="submit">{{ $buttonName }}</button>
