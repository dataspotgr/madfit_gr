{if $exception_status == "404"}
    <div class="ty-404-page" style="text-align:center; padding: 50px;">
        <h1>404 - Η σελίδα δεν βρέθηκε</h1>
        <p>Η σελίδα που ζητάτε δεν υπάρχει ή έχει μετακινηθεί.</p>
        <p><a href="{$config.current_location}" class="ty-btn ty-btn__primary">Επιστροφή στην αρχική</a></p>
    </div>
{else}
    <div class="ty-exception">
        <h1>Σφάλμα: {$exception_status}</h1>
        <p>{$exception_message nofilter}</p>
    </div>
{/if}
