<?php
/**
 * Mailer class wrapper
 *
 * @package     Mailer
 * @author      Miranda <miranda@lunnaly.com>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 * @link        http://lunnaly.com
 * @version     0.1.0
 */
class Mailer {
    /**
     * Email recipients
     *
     * @access  protected
     * @var     array
     */
    protected $recipients = array();

    /**
     * Email boundary
     *
     * @access  protected
     * @var     int
     */
    protected $bound = null;

    /**
     * Email content
     *
     * @access  protected
     * @var     string
     */
    protected $message = null;

    /**
     * Email subject
     *
     * @access  protected
     * @var     string
     */
    protected $subject = null;

    /**
     * Email sender (author)
     *
     * @access  protected
     * @var     string
     */
    protected $fromAddr = null;

    /**
     * Add a greeting message at top of the email
     *
     * @access  protected
     * @var     bool
     */
    protected $addGreeting = false;

    /**
     * Email content type (such as: html or plain text).
     *
     * @access  protected
     * @var     bool
     */
    protected $type = true;

    /**
     * Email importance level
     *
     * @access  protected
     * @var     string
     */
    protected $level = null;

    /**
     * Email attachments
     *
     * @access  protected
     * @var     array
     */
    protected $attachments = array();

    /**
     * Constructor of this class
     *
     * @access  public
     * @param   bool $greeting
     */
    public function __construct($greeting = false) {
        $this->addGreeting = $greeting;
        $this->bound = uniqid(time());
        $this->level = 'normal';
    }

    /**
     * Add an email recipient to send for.
     *
     * @access  public
     * @param   string $email
     * @param   string $name
     * @return  object
     */
    public function addRecipient($email, $name = null) {
        if (!isset($email)) {
            throw new MailerException('Please specify an email!');
        }

        if (isset($name) && !empty($name)) {
            $this->recipients[$name] = $email;
        } else {
            $this->recipits[] = $email;
        }

        return $this;
    }

    /**
     * Set the email content to send.
     *
     * @access  public
     * @param   string $msg
     * @return  object
     */
    public function setMessage($msg) {
        if (!isset($msg)) {
            throw new MailerException('You must specify a message to send, dear padawan!');
        }

        $this->message = (isset($msg) && !empty($msg)) ? trim(stripslashes($msg)) : null;

        return $this;
    }

    /**
     * Set the email subject
     *
     * @access  public
     * @param   string $subject
     * @return  object
     */
    public function setSubject($subject) {
        if (!isset($subject)) {
            throw new MailerException('Wait a minute, a subject is required luke!');
        }

        $this->subject = (isset($subject) && !empty($subject)) ? $subject : null;

        return $this;
    }

    /**
     * Set the email sender
     *
     * @access  public
     * @param   string $name
     * @param   string $email
     * @return  object
     */
    public function setFrom($name, $email) {
        if (!isset($name) || !isset($email)) {
            throw new MailerException('Unless the email/name is from your sister, you must enter an email or a name!');
        }

        $this->fromAddr = (isset($name, $email) && (!empty($name)) && !empty($email)) ? $name . " <" . $email . ">": null;

        return $this;
    }

    /**
     * Set the email importance level
     *
     * @access  public
     * @param   string $lvl
     * @return  object
     */
    public function setLevel($lvl = 'normal') {
        $this->level = (isset($lvl) && !empty($lvl)) ? $lvl : null;

        return $this;
    }

    /**
     * Add an attachment to send via Email
     *
     * @access  public
     * @param   string $file
     * @return  object
     */
    public function attachment($file) {
        if (!file_exists($file)) {
            throw new MailerException('Provided file (' . $file . ') to add as attachments doesn\' exists!');
        }

        $base = basename($file);
        $header =  "--{$this->bound}\r\n";
        $header .= "Content-Type: ". File::mime($file, true) ."; name=\"{$base}\"\r\n";
        $header .= "Content-Transfer-Encoding: base64\r\n";
        $header .= "Content-Disposition: attachment; filename=\"{$base}\"\r\n\r\n";
        $header .= chunk_split(base64_encode(fread(fopen($file, 'rb'), filesize($file))), 72) . "\r\n";

        $this->attachments[] = $header;

        return $this;
    }

    /**
     * Set the email content type
     *
     * @access  public
     * @param   string $type
     * @return  object
     */
    public function is($type) {
        if (!isset($type)) {
            throw new MailerException('Luke, i\'m your father and you must specify the email type!');
        }

        $this->type = (isset($type) && !empty($type)) ? $type : null;

        return $this;
    }

    /**
     * Send email to $this->recipients
     *
     * @access  public
     * @param   int $pauseEvery
     * @return  bool
     */
    public function send($pauseEvery = 25) {
        $count = 1;

        foreach ($this->recipients as $toName => $toAddr) {
            // Increments the counter
            $count++;

            // Every $pauseEvery emails, wait for three seconds
            if (is_int($pauseEvery) && ($count % $pauseEvery) == 0) {
                sleep(3);
            }

            // Now send the email
            if ($this->sendEmail($toAddr, $toName)) {
                // Increment counter
                $count++;

                // Continue
                continue;
            } else {
                return false;
            }
        }

        return true;
    }

    /**
     * Send email to the specified address with a greeting with the $toName if greeting is enabled
     *
     * @access  private
     * @param   string $toAddr
     * @param   string $toName
     * @return  void
     */
    private function sendEmail($toAddr, $toName = null) {
        if (!isset($toAddr)) {
            throw new MailerException('Can you please specify an email address C-3PO?');
        }

        // Prepare name and subject
        $toName  = (isset($toName) && is_string($toName))  ? $toName  : 'Sir/Madam';

        // Lunnaly version
        $version = phpversion();

        // Compose body
        $body = ($this->addGreeting === true) ? "Dear, " . $toName . "\r\n" . $this->message : $this->message;

        // Set headers
        $headers = "X-Mailer: PHP v{$version}\r\n";
        $headers .= 'From: ' . $this->fromAddr . "\r\n";
        $headers .= 'To: ' . $toName . " <{$toAddr}>\r\n";
        $headers .= $this->buildHeaders($body);

        if (count($this->attachments) > 0) {
            $headers .= $this->attachments;
        }

        // Send the email
        if (mail($toAddr, $this->subject, $body, $headers)) {
            return true;
        }

        return false;
    }

    /**
     * Build some needed custom headers
     *
     * @access  private
     * @param   string $content
     * @return  string
     */
    private function buildHeaders($content) {
        if (!isset($content)) {
            throw new MailerException('The email body is more empty than the Death Star after exploding...');
        }

        // Custom headers based on the current timestamp
        $headers = "Date: " . Date::today('r') . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/alternative; boundary=\"{$this->bound}\"\r\n\r\n";
        $headers .= "--{$this->bound}\r\n";

        // Email importance level
        $headers .= "Importance: {$this->level}\r\n";

        switch ($this->type) {
            case 'html':
                $headers .= "Content-Transfer-Encoding: quoted-printable\r\n";
                $headers .= "Content-Type:text/html;charset=" . String::encoding() . "\r\n";
                $headers .= "<html>\n<body>\n{$content}\n</body>\n</html>\r\n\r\n";
                $headers .= "--{$this->bound}\r\n\r\n";
                break;
            case 'plain':
            default:
                $headers .= "Content-Transfer-Encoding: quoted-printable\r\n";
                $headers .= "Content-Type:text/plain;charset=" . String::encoding() . "\r\n";
                $headers .= "{$content}\r\n\r\n";
                $headers .= "--{$this->bound}\r\n\r\n";
                break;
        }

        return $headers;
    }
}

final class MailerException extends RuntimeException {}
?>