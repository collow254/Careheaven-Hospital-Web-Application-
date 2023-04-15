<div>
	<div class="chat_container">
		<div class="chat_list_container">
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.chat-list')->html();
} elseif ($_instance->childHasBeenRendered('l3501330146-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3501330146-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3501330146-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3501330146-0');
} else {
    $response = \Livewire\Livewire::mount('chat.chat-list');
    $html = $response->html();
    $_instance->logRenderedChild('l3501330146-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
		</div>
		<div class="chat_box_container">
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.chatbox')->html();
} elseif ($_instance->childHasBeenRendered('l3501330146-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3501330146-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3501330146-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3501330146-1');
} else {
    $response = \Livewire\Livewire::mount('chat.chatbox');
    $html = $response->html();
    $_instance->logRenderedChild('l3501330146-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.send-message')->html();
} elseif ($_instance->childHasBeenRendered('l3501330146-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3501330146-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3501330146-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3501330146-2');
} else {
    $response = \Livewire\Livewire::mount('chat.send-message');
    $html = $response->html();
    $_instance->logRenderedChild('l3501330146-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
		</div>
		
	</div> 
</div>
<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/livewire/chat/main.blade.php ENDPATH**/ ?>