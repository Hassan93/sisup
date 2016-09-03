@extends('layout.main')
@section('title', '| Contact')
 @section('content')

        <div class="row">
          <div class="col-md-8">
             <div class="post">
               <h3>Contact Me</h3>
               <hr>
               <form>
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    <input  class="form-control" type="email" name="email" placeholder="Enter your e-mail here!">
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input  class="form-control" type="text" name="subject" placeholder="Enter the Message subject here!">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                  <textarea  class="form-control" name="message" rows="10" cols="40" placeholder="Write the e-mail message here!"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success"name="send" value="Send Message">Send Message</button>
               </form>
          </div>

     </div>
          <div class="col-md-3 col-md-offset-1">
            <h2>Sibebar</h2>
        </div>
@endsection
