{** block-description:tmpl_copyright **}
<p class="bottom-copyright">
    &copy;
    {if $settings.Company.company_start_year && $smarty.const.TIME|date_format:"%Y" != $settings.Company.company_start_year}
        {$settings.Company.company_start_year} -
    {/if}
    
    {$smarty.const.TIME|date_format:"%Y"} madfit.gr. &nbsp;Developed by <a class="bottom-copyright" href="https://dataspot.gr" target="_blank">dataspot.gr</a>
</p>