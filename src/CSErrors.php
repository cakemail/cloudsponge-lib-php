<?php
namespace CloudSponge;

class CSErrors {

    public $codes = 
        array(
            "1" => array("category" => "Failed", "explanation" => "Could not authenticate the domain key/password."),
            "2" => array("category" => "Failed", "explanation" => "Invalid parameters supplied to begin_import."),
            "256" => array("category" => "Failed", "explanation" => "Unexpected error occurred during webmail import."),
            "257" => array("category" => "Failed", "explanation" => "Webmail import failed."),
            "258" => array("category" => "Failed", "explanation" => "Timeout occurred during webmail import."),
            "259" => array("category" => "Failed", "explanation" => "Username and password are required."),
            "260" => array("category" => "Failed", "explanation" => "Service is required."),
            "261" => array("category" => "Failed", "explanation" => "Unrecognized service selected."),
            "262" => array("category" => "Failed", "explanation" => "The same import failed to authenticate recently."),
            "263" => array("category" => "Failed", "explanation" => "Username and password do not match."),
            "264" => array("category" => "Failed", "explanation" => "The address book is temporarily unavailable, please try again later."),
            "265" => array("category" => "Failed", "explanation" => "This account has been canceled."),
            "266" => array("category" => "Failed", "explanation" => "The account has been blocked. Reset the password to reenable it."),
            "267" => array("category" => "Failed", "explanation" => "Terms of Service have changed for your account. Sign in to your account to enable it."),
            "512" => array("category" => "Failed", "explanation" => "Unknown error occurred during a user consent import."),
            "513" => array("category" => "Failed", "explanation" => "User consent import failed because the domain is not permitted to use the service."),
            "514" => array("category" => "Abandoned", "explanation" => "User consent import failed because the user did not provide consent to access their contacts."),
            "516" => array("category" => "Abandoned", "explanation" => "Consent was not granted within the allotted time."),
            "517" => array("category" => "Abandoned", "explanation" => "The user abandoned the import before consent was granted."),
            "518" => array("category" => "Failed", "explanation" => "Unable to communicate successfully with the address book provider."),
            "528" => array("category" => "Failed", "explanation" => "Unable to retrieve contacts. New Yahoo! users must wait 14 days to use this feature."),
            "768" => array("category" => "Failed", "explanation" => "Unexpected error occurred during applet import."),
            "769" => array("category" => "Abandoned", "explanation" => "Applet failed to import because user did not trust the applet."),
            "770" => array("category" => "Failed", "explanation" => "Applet failed to import because it could not find an appropriate address book to import."),
            "771" => array("category" => "Failed", "explanation" => "Applet failed to submit contacts to CloudSponge."),
            "772" => array("category" => "Abandoned", "explanation" => "The Desktop Applet was not trusted within the allotted time."),
            "773" => array("category" => "Abandoned", "explanation" => "The user abandoned the import before the Desktop Applet was trusted."),
            "774" => array("category" => "Abandoned", "explanation" => "You must allow access to Microsoft Outlook to import your contacts."),
            "775" => array("category" => "Failed", "explanation" => "The import was denied access to Contacts by the OS."),
            "1025" => array("category" => "Failed", "explanation" => "A file was uploaded that is not of type text/csv."),
            "1026" => array("category" => "Failed", "explanation" => "A CSV file was uploaded but could not be parsed.")
        );
}
?>