@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
       <!-- 名前 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div >
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="firstname" placeholder="例：山田" value="{{ old('firstname') }}"/>
              <input type="text" name="lastname" placeholder= "例：太郎" value="{{ old('lastname') }}"/>
            </div>
            <div class="form__error">
               @error('firstname')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
         <!-- 性別 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
             <label><input type="radio" name="gender" value="男" checked>男 </label>
             <label><input type="radio" name="gender"value="女"> 女</label>
             <label><input type="radio" name="gender"value="その他"> その他</label>
            </div>
            <div class="form__error">
@error('gender')
  {{ $message }} 
@enderror
            </div>
          </div>
        </div>
        <!-- メールアドレス -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
@error('email')
  {{ $message }} 
@enderror
            </div>
          </div>
        </div>
        <!-- 電話番号 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678"value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
@error('tel')
  {{ $message }} 
@enderror
            </div>
          </div>
        </div>
        <!-- 住所 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" >
            </div>
            <div class="form__error">
@error('address')
  {{ $message }} 
@enderror
            </div>
          </div>
        </div>
        <!-- 建物名 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building-name" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building-name') }}">
            </div>

          </div>
        </div>
        <!-- お問い合わせの種類 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <select name="select"> placeholder="選択してください"
               <option value="選択してください">選択してください</option>
              </select>
                          <div class="form__error">
@error('select')
  {{ $message }} 
@enderror
            </div>
            </div>
          </div>
        </div>
        <!-- 問い合わせ内容 -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}"></textarea>
            </div>
                        <div class="form__error">
@error('content')
  {{ $message }} 
@enderror
            </div>
          </div>
        </div>
        <!-- 送信ボタン -->
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
@endsection