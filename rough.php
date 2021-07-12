<html>
<head>
<script type="text/javascript">
function chkcontrol(j) {
    var total=0;
    for(var i=0; i < document.games.ckb.length; i++){
        if(document.form1.ckb[i].checked){
            total =total +1;
        }
        if(total > 4){
            alert("Please Select only four!")
            document.form1.ckb[j].checked = false ;
            return false;
        }
    }
}
</script>

</head>
<body>
<table width="100%" border="0">
    <form action="" id="form1" name="form1">
            <tr>
              <th width="37%" height="19" align="center" bgcolor="#CCCCCC"><strong>Biological</strong></th>
              <th width="37%" align="center" bgcolor="#CCCCCC"><strong> Psychological</strong></th>
              <th width="37%" align="center" bgcolor="#CCCCCC"><strong> Social</strong></th>
            </tr>
            <tr>
              <td><input type="radio" name="Antidepressant" id="ckb" value="Antidepressant" onclick="chkcontrol(0);" />
                <label for="Antidepressant"></label>Antidepressant</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Antipsychotic oral" id="ckb" value="Antipsychotic oral" onclick="chkcontrol(1);" />
                <label for="Antipsychotic oral"></label>Antipsychotic oral</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Antipsychotic_depot" id="ckb" value="Antipsychotic depot" onclick="chkcontrol(2);" />
                <label for="Antipsychotic depot"></label>Antipsychotic depot</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Bblocker" id="ckb" value="B-blocker"  onclick="chkcontrol(3);"/>
                <label for="B-blocker"></label>B-blocker</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Benzodiazepine" id="ckb" value="Benzodiazepine"  onclick="chkcontrol(4);"/>
                <label for="Benzodiazepine"></label>Benzodiazepine</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Mood_stabiliser" id="ckb" value="Mood stabiliser"  onclick="chkcontrol(5);"/>
                <label for="Mood stabiliser"></label>Mood stabiliser</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="ECT" id="ckb" value="ECT"  onclick="chkcontrol(6);"/>
                <label for="ECT"></label>ECT</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Otherbio" id="ckb" value="Other"  onclick="chkcontrol(7);"/>
                <label for="Other"></label>
                Other</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
        </form>
    </table>
    
    
    <?php
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);
$select_q="select * from eventlist";
$q=mysqli_query($dbconn, $select_q);

?>
<form action="#" method="post" name="games">
<input type="hidden" name="submitted" value="true"/>
<?php while($r=mysqli_fetch_array($q)) { ?>
<input type="checkbox" name="event[]" id="ckb" value="<?php echo $r['name'];   ?> ," onclick="chkcontrol(0); style="margin-left: 50px;height: 20px;width: 20px;"/>
<a href="<?php echo $r['url']?>" style="text-decoration: none;"> <?php echo $r['name']; ?></a><br /><br />
<?php } ?>

  
</body>
</html>
Still, it doesn't make sense as the form is not submitting its content anywhere, but it's a good POC.

shareimprove this answer
answered Jun 24 '12 at 3:05

alfasin
41k105388
3
multiple id="ckb" is not correct. <label> also refers to the element_id and not the name. – tradyblix Jun 24 '12 at 3:08 
Thanks..its working fine now :) Thanks again – Tina Jun 24 '12 at 3:08
@Tina - There are much more errors in your code. See my comment above. – Derek ???? Jun 24 '12 at 3:10
i meant the label should refer to the element_id not the name. – tradyblix Jun 24 '12 at 3:14
@tradyblix I didn't intent to start fixing all the errors, just to demonstrate how to make it work. There are other things that I would change such as: assigning the "onclick" method on the head instead of the body etc. – alfasin Jun 24 '12 at 3:30
show 2 more comments
Your Answer

 
Sign up or log in
 Sign up using Google
 Sign up using Facebook
 Sign up using Email and Password
 
Post as a guest
Name

Email

required, but never shown
By posting your answer, you agree to the privacy policy and terms of service.

Not the answer you're looking for? Browse other questions tagged javascript validation html-form or ask your own question.
asked

5 years, 9 months ago

viewed

2,124 times

active

5 years, 9 months ago

Work from anywhere
Application Security Engineer
Wikimedia Foundation, Inc.San Francisco, CA
REMOTE
phpjavascript
Europe-based Customer Support Engineer
Platform.shParis, France
REMOTE
phpgit
Full Stack Developer (m/f) / Vollzeit / Remote / Laravel
1337 UGC GmbHNo office location
REMOTE
phpsql
Drupal Sitebuilder & Front-end Developer
AmazeeNo office location
REMOTE
javascriptsass
Work remotely - from home or wherever you choose.

Browse remote jobs
Related
2095
Validate decimal numbers in JavaScript - IsNumeric()
737
Is there a (built-in) way in JavaScript to check if a string is a valid number?
1457
How to align checkboxes and their labels consistently cross-browsers
3462
Setting “checked” for a checkbox with jQuery?
2209
How can I know which radio button is selected via jQuery?
1277
Get selected value in dropdown list using JavaScript?
1388
Generating random whole numbers in JavaScript in a specific range?
1892
Get selected text from a drop-down list (select box) using jQuery
894
Check if checkbox is checked with jQuery
1164
Generate random number between two numbers in JavaScript
Hot Network Questions
How do I log out in chromium?
Could a Megacity be a Penal Colony?
How can I know if a country allows drones?
Does a monk with Extra Attack trigger Martial Arts if only one attack is unarmed?
Difference between half note and quarternote with quarter rest
Why has Israel not expelled Russian diplomats in response to the Skripal poisoning?
Why does the Pied Piper neighborhood smell like bacon?
Why is faith seen as a sign of weakness, instead of an unexplored land/opportunity?
Why won't they recover the Falcon 9 from CRS-14?
Is there a generalization (surely there is) of this simple combinatorial identity?
In episode IV, did the inhabitants of Alderaan realize what was about to happen?
Is this Swedish government pamphlet a guide for men who have married underage girls?
How close were inns in medieval Europe?
Trying to get a Laurent expansion of a symbolic function
This one's a kettle of (red) fish
Replace UTF-8 characters with shell perl
How to derive the area of a circle without the use of calculus?
What are general tips to test a static website?
A problem to be solved using integration by parts.
Buying IC help (spotting counterfeit/knockoffs)
The symmetry of months
When/why is "ne" used by itself in dependent clauses
Cracking Nested One-time Pads
What’s the etiquette on using diagrams that need color to be understood?
