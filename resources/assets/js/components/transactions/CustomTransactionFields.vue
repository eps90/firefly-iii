<!--
  - CustomTransactionFields.vue
  - Copyright (c) 2019 james@firefly-iii.org
  -
  - This file is part of Firefly III (https://github.com/firefly-iii).
  -
  - This program is free software: you can redistribute it and/or modify
  - it under the terms of the GNU Affero General Public License as
  - published by the Free Software Foundation, either version 3 of the
  - License, or (at your option) any later version.
  -
  - This program is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  - GNU Affero General Public License for more details.
  -
  - You should have received a copy of the GNU Affero General Public License
  - along with this program.  If not, see <https://www.gnu.org/licenses/>.
  -->

<template>
  <div>
    <p class="help-block" v-text="$t('firefly.hidden_fields_preferences')"></p>
    <component
        v-bind:is="dateComponent"
        v-if="this.fields.interest_date" v-model="value.interest_date" :error="error.interest_date"
        name="interest_date[]" v-bind:title="$t('form.interest_date')"></component>
    <component
        v-bind:is="dateComponent"
        v-if="this.fields.book_date" v-model="value.book_date" :error="error.book_date" name="book_date[]"
        v-bind:title="$t('form.book_date')"></component>
    <component
        v-bind:is="dateComponent"
        v-if="this.fields.process_date" v-model="value.process_date" :error="error.process_date"
        name="process_date[]" v-bind:title="$t('form.process_date')"></component>
    <component
        v-bind:is="dateComponent"
        v-if="this.fields.due_date" v-model="value.due_date" :error="error.due_date" name="due_date[]"
        v-bind:title="$t('form.due_date')"></component>
    <component
        v-bind:is="dateComponent"
        v-if="this.fields.payment_date" v-model="value.payment_date" :error="error.payment_date"
        name="payment_date[]" v-bind:title="$t('form.payment_date')"></component>

    <component
        v-bind:is="dateComponent"
        v-if="this.fields.invoice_date" v-model="value.invoice_date" :error="error.invoice_date"
        name="invoice_date[]" v-bind:title="$t('form.invoice_date')"></component>

    <component
        v-bind:is="stringComponent"
        v-if="this.fields.internal_reference" v-model="value.internal_reference" :error="error.internal_reference"
        name="internal_reference[]" v-bind:title="$t('form.internal_reference')"></component>

    <component
        v-bind:is="attachmentComponent"
        v-if="this.fields.attachments" v-model="value.attachments" :error="error.attachments"
        name="attachments[]" v-bind:title="$t('firefly.attachments')"></component>

    <component
        v-bind:is="uriComponent"
        v-if="this.fields.external_url" v-model="value.external_url" :error="error.external_url"
        name="external_url[]" v-bind:title="$t('firefly.external_url')"></component>

    <component
        v-bind:is="textareaComponent"
        v-if="this.fields.notes" v-model="value.notes" :error="error.notes" name="notes[]"
        v-bind:title="$t('firefly.notes')"></component>
  </div>
</template>

<script>
export default {
  name: "CustomTransactionFields",
  props: ['value', 'error'],
  mounted() {
    this.getPreference();
  },
  data() {
    return {
      customInterestDate: null,
      fields: [
        {
          "interest_date": false,
          "book_date": false,
          "process_date": false,
          "due_date": false,
          "payment_date": false,
          "invoice_date": false,
          "internal_reference": false,
          "notes": false,
          "attachments": false,
          "external_url": false
        }
      ]
    };
  },
  computed: {
    // TODO this seems to be a pretty weird way of doing it.
    dateComponent() {
      return 'custom-date';
    },
    stringComponent() {
      return 'custom-string';
    },
    attachmentComponent() {
      return 'custom-attachments';
    },
    textareaComponent() {
      return 'custom-textarea';
    },
    uriComponent() {
      return 'custom-uri';
    }
  },
  methods: {
    handleInput(e) {
      this.$emit('input', this.value);
    },
    getPreference() {

      // Vue.component('custom-date', (resolve) => {
      //      console.log('loaded');
      //  });

      const url = document.getElementsByTagName('base')[0].href + 'api/v1/preferences/transaction_journal_optional_fields';
      axios.get(url).then(response => {
        this.fields = response.data.data.attributes.data;
      }).catch(() => console.warn('Oh. Something went wrong loading custom transaction fields.'));
    },
  }
}
</script>
