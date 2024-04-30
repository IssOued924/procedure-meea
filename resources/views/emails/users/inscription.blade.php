@extends('emails.template')

@section('content')

<!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <p>{{ $mailData['salutation'] }}</p>
                  <p>{{ $mailData['text1'] }}</p>
                  <p>{{ $mailData['text2'] }}</p>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                    <tbody>
                      <tr>
                        <td align="left">
                          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td> <a href="{{ $mailData['url'] }}" target="_blank">Vérifier l'adresse e-mail</a> </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <p>{{ $mailData['text3'] }}</p>
                  <span style="font-size: 10px;">{{ $mailData['url'] }}</span>
                  <p>Cordialement,</p>
                </td>
              </tr>

              <!-- END MAIN CONTENT AREA -->
              </table>
@endsection