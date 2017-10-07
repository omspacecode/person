@extends('main')

@section('title','| Contact') 

@section('content')
            <div class="row">
                <div class="col-md-8"> 
                    <h1>Contact We</h1> 
                    <hr>
                    <form>
                        <div class="form-group">
                            <label mame="email">Email:</label>
                            <input id="email" name="email" class="form-control"> 
                        </div>

                         <div class="form-group">
                            <label mame="subject">Subject:</label>
                            <input id="subject" name="subject" class="form-control">
                        </div>
 
                         <div class="form-group"> 
                            <label mame="message">Message:</label>
                            <textarea id="message" name="message" class="form-control"> 
                            </textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn-success"> 
                    </form> 
                </div>
            </div>
@endsection 