@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
 <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>confirm</h2>
      </div>
       <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
          <table class="rconfirm-table__inne">
            <!-- 名前 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="firstname" value="{{ $contact['firstname'] }}"/>
                <input type="text" name="lastname" value="{{ $contact['lastname'] }}"/>
              </td>
            </tr>
             <!-- 性別 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="text" name="gender" value="{{ $contact['gender'] }}" />
              </td>
            </tr>
            <!-- メールアドレス -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}"/>
              </td>
            </tr>
            <!-- 電話番号 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $contact['tel'] }}" />
              </td>
            </tr>
            <!-- 住所 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" />
              </td>
            </tr>
             <!-- 建物名 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building-name" value="{{ $contact['building-name'] }}" />
              </td>
            </tr>
            <!-- お問い合わせの種類 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <input type="text" name="select" value="{{ $contact['select'] }}" />
              </td>
            </tr>
            <!-- お問い合わせ内容 -->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['content'] }}" />
              </td>
            </tr>
          </table>
        </div>
        <!-- 送信ボタン -->
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
@endsection