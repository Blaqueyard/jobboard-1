<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";
    require_once __DIR__."/../src/JobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function() {
?>
      <h1>Post your job!</h1>

      <form action="/posting">

          <label for="title">Job Title:</label>
          <input type="text" name="title" id="title">

          <label for="des">Job Description:</label>
          <input type="text" name="des" id="des">

          <label for="phone">Phone Number:</label>
          <input type="text" name="phone" id="phone">

          <label for="email">Email Address:</label>
          <input type="text" name="email" id="email">

          <label for="address">Address:</label>
          <input type="text" name="address" id="address">

          <button type='submit' class='btn-success'>Submit</button>

      </form>
<?php
  return "";
    });

    $app->get("/posting", function(){
      $job_opening = new JobOpening($_GET["title"], $_GET["des"]);
      $contact = new Contact($_GET["phone"], $_GET["email"], $_GET["address"]);
?>
        <p><?php echo $job_opening->getTitle(); ?></p>
        <p><?php echo $job_opening->getDes(); ?></p>
        <p><?php echo $contact->getPhone(); ?></p>
        <p><?php echo $contact->getEmail(); ?></p>
        <p><?php echo $contact->getAddress(); ?></p>
<?php
      return "";
    });
    return $app;
 ?>
