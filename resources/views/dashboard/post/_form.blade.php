@csrf

<div>
    <label for="">Title</label>
    <input type="text" name="title" value="{{ $post-> title }}">
</div>
<div>
    <label for="">Slug</label>
    <input type="text" name="slug" value="{{ $post-> slug }}">
</div>
<div>
    <label for="">Content</label>
    <textarea name="content" >{{ $post-> content }}</textarea>

    <label for="">Description</label>
    <textarea name="description">{{ $post-> description }}</textarea>
</div>

<div>
    <label for="">Category</label>
    <select name="category_id" id="">
       @foreach ($categories as $title => $id)
           <option {{ $post->category ==  $id ? 'selected' : null}} value={{ $id }}>{{ $title }}</option>
       @endforeach
    </select>

    <label for="">Posted</label>
    <select name="posted">
        <option {{ $post->posted ==  'not' ? 'selected' : null}} value="not">No</option>
        <option {{ $post->posted ==  'yes' ? 'selected' : null}} value="yes">Yes</option>
    </select>
</div>

<button type="submit">Send</button>