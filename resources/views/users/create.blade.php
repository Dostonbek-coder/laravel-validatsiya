
    <form action="{{route ('users.store')}}" method="POST">
        @csrf


        <label>Ism: <input type="text" name="name" value="{{ old('name') }}"></label>
        @error('name') {{ $message }} @enderror
        <br>
        
        <label>Email: <input type="email" name="email" value="{{ old('email') }}"></label>
        @error('email') {{ $message }} @enderror
        
        <br>

        <label>Yosh: <input type="number" name="age" value="{{ old('age') }}"></label>
        @error('age') {{ $message }} @enderror
        <br>

        <label>Sana: <input type="date" name="date" value="{{ old('date') }}"></label>
        @error('date') {{ $message }} @enderror
        <br>

        <label>Parol: <input type="password" name="password"></label><br>
        <label>Parolni qayta kiriting: <input type="password" name="password_confirmation"></label>
        @error('password') {{ $message }} @enderror
        <br>

        <label>URL: <input type="text" name="url" value="{{ old('url') }}"></label>
        @error('url') {{ $message }} @enderror
        <br>

        <label>Profil rasmi: <input type="file" name="image"></label>
        @error('profile_image') {{ $message }} @enderror
        <br>

        <label>Mahsulot nomi: <input type="text" name="product_name" value="{{ old('product_name') }}"></label>
        @error('product_name') {{ $message }} @enderror
        <br>

        <label>Mahsulot narxi: <input type="number" step="0.01" name="price" value="{{ old('price') }}"></label>
        @error('price') {{ $message }} @enderror
        <br>

        <button type="submit">Yuborish</button>
    </form>

