{__('Mail', "This is the message to forward to the poll participants.")}
<br/>
<br/>
{$poll_creator_name} {__('Mail', 'has just created a poll called')} {$poll_name}
<br/>
{__('Mail', 'Thank you for participating in the poll at the following link')}:
<br/>
<br/>
<a href="{$poll_url}">{$poll_url}</a>
