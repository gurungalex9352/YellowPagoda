<?php include('process/config.php'); ?>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $room_type = $_POST['room_type'];
    $total_guest = $_POST['total_guest'];
    $contact_no = $_POST['contact_no'];

    if ($name != "" && $email != "" && $check_in_date != "" && $check_out_date != "" && $room_type != "" && $total_guest != "" && $contact_no != "") {
        if (strlen($contact_no) == 10) {
            $insert_query = "INSERT INTO booking(name, email, check_in_date, check_out_date, room_type, total_guest, contact_no) VALUES ('$name', '$email', '$check_in_date', '$check_out_date', '$room_type', '$total_guest', '$contact_no')";
            $result = mysqli_query($conn, $insert_query);

            if ($result) {
                


                $to = $email;
                $subject = "Booking for Hotel Yellow Pagoda";
                $message = "You're Booking Details:

                Name: $name
                Check-in-Date: $check_in_date 
                Check-out-date: $check_out_date
                Room type: $room_type
                Total Guest: $total_guest

                Thank you for booking our hotel.

                ";
                $headers = "From: unitykat37@gmail.com".phpVersion();

                mail($to, $subject, $message, $headers);


                // if(mail($to,$subject,$message,$headers)){
                // echo "Mail sent";
                // } else{
                // echo "Mail sending failed";
                // }

                header('location:thankyouPage.php?msg=BookingSuccessful');

            } else {
?>
                <div style="display:flex; justify-content:center;">
                    <div class="alert alert-primary w-50 alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        INVALID DATA !!!
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div style="display:flex; justify-content:center;">
                <div class="alert alert-primary w-50 alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Phone number should be atleast 10 digits
                </div>
            </div>

        <?php
        }
    } else {
        ?>
        <div style="display:flex; justify-content:center;">
            <div class="alert alert-primary w-50 alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Please fill all the data !
            </div>
        </div>

<?php

    }
}
?>