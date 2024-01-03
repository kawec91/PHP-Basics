<h3 class="text-center p-4 text-lg">Contact Page</h3>
<div class="w-full h-full flex flex-col justify-center">
    <form action="index.php?page=contactspeichern" method = "post" class="flex flex-col justify-center items-center gap-2">
        <input class="standardInputStyle" type="text" placeholder="Vorname" name='Vname'/>
        <input class="standardInputStyle" type="text" placeholder="Nachname" name='Nname'/>
        <input class="standardInputStyle" type="text" placeholder="Email" name='Email'/>
        <textarea class="standardInputStyle" placeholder='Nachricht' name="Msg"></textarea>
        <button type="submit" class="border border-blue-500 px-4 py-2 rounded bg-blue-500 text-white ">Senden</button>
    </form>
</div>

