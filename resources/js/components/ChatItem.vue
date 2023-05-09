<template>
	<div class="message" :class="{'is-current-user': $root.currentUserLogin.id === message.user.id}">
        <div class="message__outer">
        <div class="message__avatar"></div>
        <div class="message__inner">
            <div class="message__bubble">{{ message.user.name}}</div>
            <div class="message__actions"> </div>
            <div class="message__spacer">{{ message.message }}</div>
        </div>
        <div class="message__status">
            <span class="avatar"></span>
        </div>
    </div>
		<!-- <div class="message-item user-name">
			
		</div>
		<div class="message-item timestamp">
			| {{ message.created_at.split(' ')[1] }}: 
		</div>
		<div class="message-item text-message">
			{{ message.message }}
		</div> -->
	</div>
</template>

<script>
	export default {
        props: {
          message: {
            type: Object,
            default: {}
          }
        }
    }
</script>
