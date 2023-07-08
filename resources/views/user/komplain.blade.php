@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Subject</label>
      <input type="email" class="form-control border" id="exampleInputEmail1" aria-describedby="emailHelp" value="playstation">
      <div id="emailHelp" class="form-text">What is your problem?</div>
    </div>
    <div class="mb-3">
      <label for="choice" class="form-label">Type of Complaint</label>
      <select class="form-select" aria-label="Default select example" id="choice">
        <option selected>Open this select menu</option>
        <option value="1">Entertainment</option>
        <option value="2">Management</option>
        <option value="3">College</option>
        <option value="4">Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="choice2" class="form-label">Product Condition</label>
      <select class="form-select" aria-label="Default select example" id="choice2">
        <option selected>Open this select menu</option>
        <option value="1">Good</option>
        <option value="2">Average</option>
        <option value="3">Bad</option>
        <option value="4">Very Bad</option>
      </select>
    </div>
    <div class="mb-3">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description (255 letters)</label>
            <textarea class="form-control border" id="exampleFormControlTextarea1" rows="8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dolor quod veniam suscipit quam eligendi error earum magni dolorem praesentium neque aliquam eum doloremque rem porro soluta placeat sint atque.</textarea>
          </div>
    </div>
    
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
