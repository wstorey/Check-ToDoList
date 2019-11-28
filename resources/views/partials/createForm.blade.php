{{ csrf_field() }}
<input class="add-Todo-Or-Item" name="name" placeholder="{{ $title }}" type="text" value="{{ $name ?? '' }}">
<button class="btn btn-primary add-button" type="submit">{{ $buttonName }}</button>
