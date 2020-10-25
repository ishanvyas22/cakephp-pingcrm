<template>
    <div>
        <component v-bind:is="$page.flash.element" :flashMessage="$page.flash.message"></component>
    </div>
</template>

<script>
import FlashSuccess from '@/Shared/Flash/Success';
import FlashError from '@/Shared/Flash/Error';

export default {
    components: {
        FlashSuccess,
        FlashError,
    },
};
</script>
