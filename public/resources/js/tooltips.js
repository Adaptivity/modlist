$('.universal').tooltip({
    title: "Universal mods can be used on both client and server with the same file"
});
$('.client').tooltip({
    title: "Clientside mods only need to be installed on the client, usually providing display changes"
});
$('.server').tooltip({
    title: "Serverside mods only need to be installed on the server, usually providing extra commands or administration tools"
});
$('.ssp').tooltip({
    title: "SSP mods work in singleplayer and have their own mod file"
});
$('.lan').tooltip({
    title: "LAN mods can be used in LAN mode as long as the other player has the mod"
});
$('.smp').tooltip({
    title: "SMP mods work in multiplayer and have their own mod file"
});
$('.opensource').tooltip({
    title: "Visible Source - may also be Open Source"
});
$('.base-edit').tooltip({
    title: "This mod changes internal Minecraft files and are likely incompatible with other mods"
});
$('.opensource-contained').tooltip({
    title: "This mod has a visible source, but the source code is obtained via PM or contained within the main download."
});
$('.cl-update').tooltip({
    title: "Updated"
});
$('.cl-add').tooltip({
    title: "Added"
});
$('.cl-remove').tooltip({
    title: "Removed"
});
$('.forge-required').tooltip({
    title: "Forge is required to run this mod"
});
$('.forge-compatible').tooltip({
    title: "This mod can run on Forge, but Forge is not required. Most ModLoader mods can be loaded by Forge."
});
$('.not-forge-compatible').tooltip({
    title: "This mod cannot run with Forge. It modifies class files that are required for Forge mods to run."
});
$('.version-link').tooltip({
    placement: "right"
});
$('.dependency').tooltip({
    placement: "auto"
});
$('.progress-bar').tooltip({
    placement: "auto"
});
$('.panel-new-version').tooltip({
    title: "This is a new version added by the submitter"
});
$('#request-type-group').attr('data-toggle','buttons');
$('#request-type-group>label').addClass("btn btn-primary");
$('.dependency').click(function(e) {
    var windowHeight = $(window).height();
    var selected = $(this).parent().attr('href');
    if(typeof selected !== "undefined") {
        e.preventDefault();
        $('#modlist tbody tr').show();
        location.href = selected;
        if($(selected).length > 0) {
            $(selected).addClass('success');
            var elementHeight = $(selected).height();
            var elementPosition = $(selected).position();
            var elementTop = elementPosition.top;
            var toScroll = (windowHeight / 2) - (elementHeight / 2);
            window.scroll(0,(elementTop - toScroll));
            $(selected).removeClass('success').addClass('fade-success');
            setTimeout(function(){
                $(selected).removeClass('fade-success');
            },2000);
        } else {
            if(selected === "#modloader")
                createAlert('Missing Dependency','Modloader is not available for this version. However, Forge should be able to load this mod.');
            else
                createAlert('Missing Dependency','That dependency is not yet listed for this version.');
        }
    }
});
$(document).ready(anchorControl);
function anchorControl() {
    var windowHeight = $(window).height();
    var selected = window.location.hash;
    if(selected !== "") {
        location.href = selected;
        if($(selected).length > 0) {
            $(selected).addClass('success');
            var elementHeight = $(selected).height();
            var elementPosition = $(selected).position();
            var elementTop = elementPosition.top;
            var toScroll = (windowHeight / 2) - (elementHeight / 2);
            $(window).trigger('resize.stickyTableHeaders');
            setTimeout(function(){
                window.scroll(0,(elementTop - toScroll));
                $(selected).removeClass('success').addClass('fade-success');
                setTimeout(function(){
                    $(selected).removeClass('fade-success');
                },2000);
            },0);
        } else {
            if(selected === "#modloader")
                createAlert('Missing Mod','Modloader is not available for this version. However, Forge should be able to load ModLoader mods.');
            else
                createAlert('Missing Mod','That mod is not available for this version.');
        }
    }
}
function createAlert(title, content) {
    $('#alert .modal-dialog .modal-content .modal-header .modal-title').text(title);
    $('#alert .modal-dialog .modal-content .modal-body').text(content);
    $('#alert').modal('show');
}
$('#modlist').stickyTableHeaders({fixedOffset: $('.navbar')});