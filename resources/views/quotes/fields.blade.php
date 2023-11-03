<div class="form-group">
            <label for="published_year">Año de publicación</label>
            <input type="text" class="form-control" id="published_year" name="published_year" maxlength="4" value="{{ old('published_year') ?? (isset($quote) ? $quote->published_year: '') }}">
        </div>
        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" maxlength="60" id="author" name="author" value="{{ old('author') ?? (isset($quote) ? $quote->author: '')}}">
        </div>
        <div class="form-group">
            <label for="quoteMessage">Mensaje</label>
            <textarea id="message" name="message" class="form-control" >{{ old('message') ??  (isset($quote) ? $quote->message:'') }}</textarea> 
        </div>