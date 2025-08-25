---
permalink: /projects/
title: "Projects"
---

Thesis project topics.
----------------------

Below I list some research ideas that I would like to supervise for a research project/thesis or collaborate on. These can also be seen as research directions that I'm interested in, so if you are interested in related projects feel free to contact me as well (robv@itu.dk).

For more information about how I normally supervise see: [Supervision statement](supervision.txt)


### Word level language classification
Language classification on sentence and paragraph level can be done with a high accuracy in many 
setups. However, in many situations the label on the text level is a simplification, as languages
can switch between (or even within) words, this is called code-switching. Most
previous work on language identification for code-switched data is supervised,
meaning that they assume training data annotated for language labels on the
word level. The one exception I am aware of is the first paper in the list
below, however, the scope is limited to Spanish-English. This project aims to 
remove this assumption, so that the system does not know which languages it can
expect in an utterance. 

* [Much Gracias: Semi-supervised Code-switch Detection for
Spanish-English: How far can we get?](https://aclanthology.org/2021.calcs-1.9.pdf)
* [Data can be re-used from](https://arxiv.org/pdf/2507.18791)

### Syllable level input to language models
Since we have moved to subwords as inputs to NLP models, it is less clear how to
obtain these subword units. Most models use statistically likely character sequences.
However, these units are very irregular across languages. Therefore, it would be interesting
to investigate the use of syllable level inputs to train language models in a variety of 
languages.

* [When Being Unseen from mBERT is just the Beginning:
Handling New Languages With Multilingual Language Models](https://aclanthology.org/2021.naacl-main.38.pdf)


### Do the number of terminal symbols effect generalization in LMs?

Hierarchical generalization in language models is often studied by training them on synthetic and controlled data. As the main focus in hierarchical generalization is syntax, these studies tend to use a limited set of terminals (i.e. words), which determines the vocabulary size of the synthetic data. However, as observed in
[Targeted Syntactic Evaluation on the Chomsky Hierarchy](https://aclanthology.org/2024.lrec-main.1356/), generalization is impacted by the number of terminal symbols. I am interested in examining the relationship between terminal size and hierarchical generalization.

### How do language models learn morphologically rich languages?

Learning dynamics of language models on linguistic, especially syntactic, patterns are well documented in English. (
[Language acquisition: do children and language models follow similar  learning stages?](https://aclanthology.org/2023.findings-acl.773.pdf), 
[Subspace Chronicles: How Linguistic Information Emerges, Shifts and Interacts during Language Model Training](https://aclanthology.org/2023.findings-emnlp.879/)) English, however, represents only one common way of encoding syntactic information: via word order and function words such as prepositions. There are, however, families of languages that encode syntax via inflection or agglutination, such as Turkic or Slavic languages. These languages have different typologies, such as flexible word order and larger vocabulary size. I am interested in studying learning dynamics of language models on such languages. 


### Language model training for diverse languages
Many benchmarks (and development) have focused on English (or other Latin languages). However, 
languages differ in many ways, so it is crucial to consider a varied set of languages. Evaluating
on all languages is impractical, so a variety of (methods for finding) subsets have been proposed, 
including:

* [TypDiv](https://arxiv.org/abs/2407.05022)
* [WALS](https://wals.info/languoid/samples/100)
* [TeDDi](https://aclanthology.org/2022.lrec-1.123.pdf)

One challenge is finding data for these languages, therefore I propose to start
with language modeling, since no annotation is necessary. You can use a similar
setup (hyperparameters) for the (small) language model training as: 

* [NanoGPT](https://github.com/KellerJordan/modded-nanogpt/tree/master)
* [DECAF](https://aclanthology.org/2025.acl-demo.34.pdf)
* [MorSed](https://aclanthology.org/2025.nodalida-1.23.pdf)

### Shared tasks
Shared tasks in NLP are organized competitions where you are provided with a dataset and compete with other teams. The test data is kep secret, and will be released at the same time for all participants, where you typically have approximately 1 week to upload your predictions. As a part of the shared task, you can also submit a paper. The dates of SemEval 2026 align well with the fall semester, and the tasks they organize usually provide a nice scope for a thesis project:

* SemEval 2026: [https://semeval.github.io/SemEval2026/tasks](https://semeval.github.io/SemEval2026/tasks)

### Using agents for cultural-aware language adaptations of cartoons
Cartoons and animated videos often contain dialogues which are in relatively
simple language, but are heavily dependent on context, cultural, and they are
often colloqial. They are also often released in multiple countries and
languages.  This project aims to automate this process. This is likely not
possible in an end-to-end fashion, so I would propose to use agents for each
step. One main challenge is the evaluation, where human judgements are probably
necessary. 

### seq2seq versus sequence classification models

Recently, sequence-to-sequence (seq2seq) have become more and more powerful. There are two main approaches to use generative models for classification task; one is to prompt them, and the other is to convert the generative language model to a discriminative model. However, the comparisons are not convincing to me. Therefore, it is time for a fairer comparison to see whether generative language model can truly replace discriminative language models.


*  [Unleashing the True Potential of Sequence-to-Sequence Models for Sequence Tagging and Structure Parsing](https://aclanthology.org/2023.tacl-1.34.pdf)
*  [LLM2Vec: Large Language Models Are Secretly Powerful Text Encoders](https://arxiv.org/pdf/2404.05961)


### Early stopping strategies

When training a neural model (in NLP), it is common to use a development split
to decide when to stop training. However, this has some downsides (see: [We
Need to Talk About train-dev-test
Splits](https://aclanthology.org/2021.emnlp-main.368.pdf) ). There have been
some alternative strategies proposed for model selection/early stopping. One
strategy is to train for a specific pre-defined number of steps, another one is
to look at train loss. However, to the best of my knowledge, no comparison of
these approaches has been done.

*  [Active Learning Helps Pretrained Models Learn the Intended Task](https://openreview.net/pdf?id=0Ww7UVEoNue)
*  [Model Selection for Cross-Lingual Transfer](https://aclanthology.org/2021.emnlp-main.459.pdf)

### Translation, generation, or manual labour for instruction tuning

Instruction tuning refers to the phase of language model training where the model learns how to respond to tasks. Many instruction tuning datasets have been created for English recently. However, for other languages there is usually (almost) no manually created data. In this case, people usually use translated instructions from English data, or instructions generated by larger, more accurate language models. However, a systematic comparison is lacking. This project will investigate the amounts of data and costs of creating data with the different approaches.


### Active learning for POS tagging

POS tagging is the task of classifying words into their syntactic category:

| I    | see  | the | light |
| PRON | VERB | DET | NOUN  |

Current POS tagger are usually supervised, which means they rely on human-annotated training data. This data commonly exists of thousands of sentences. To make this process less costly, one can select a more informative sample of words to rely on, and instead only annotate this subsample. Previous work (see below) has shown that competetive performance can be obtained with as little as 400 words on English news data. However, it is unclear how this transfers to other languages/domains. In this project, the first step is to evaluate the existing method on a larger sample (i.e. the [Universal Dependencies dataset](https://universaldependencies.org/)), followed by possible improvements to the model.

Related reading:

*   [Simple Semi-Supervised POS Tagging](https://www.aclweb.org/anthology/W15-1511.pdf)


### Cross-domain language identification

Most language identification models are trained and evaluated on a single domain. A cross-domain dataset can however relatively easily be compiled, and allows for testing existing language identification models for robustness. Some existing resources for a variety of domains are listed below:

*   [Accurate Language Identification of Twitter Messages](https://aclanthology.org/W14-1303.pdf)
*   [MassiveSumm: a very large-scale, very multilingual, news summarisation dataset](https://aclanthology.org/2021.emnlp-main.797.pdf)
*   [LTI LangID Corpus](http://www.cs.cmu.edu/~ralf/langid.html)
*   [Fandom Wiki's](https://robvanderg.github.io/datasets/wikia/)


### Strategies for Morphological Tagging

Morphological tagging is the task of assigning labels to a sequence of tokens that describe them morphologically. This means that one word can have 0-n labels. There has been a variety of architectures proposed to solve this task, however it is unclear which method works best in which situation.

In this project you can make use of the [Universal Dependencies](https://universaldependencies.org/) data, which has annotation for morphological tags for many languages. You can use the [MaChAmp](https://machamp-nlp.github.io/) toolkit, or implement a BiLSTM tagger yourself, and evaluate at least the three most common strategies:

*   Predict the concatenation of the tags as one label (same as POS tagging, but with more labels)
*   Predict morphological tags as a sequence (like machine translation)
*   View the task as a multilabel prediction problem (Get a probability for each label, and set a cutoff threshold)

Related reading:

*   [The SIGMORPHON 2019 Shared Task: Morphological Analysis in Context and Cross-Lingual Transfer for Inflection](https://aclanthology.org/W19-4226/)
*   [Multi-Team: A Multi-attention, Multi-decoder Approach to Morphological Analysis.](https://aclanthology.org/W19-4206)

### Simplify then solve
There exist many variants of constructed languages, which are designed with specific purposes
in mind. Many of those are focused to "easify" processing, for example [Basic English](https://en.wikipedia.org/wiki/Basic_English) and
 [Learning English](https://en.wikipedia.org/wiki/Learning_English_(version_of_English)). 
If we are able to build a good machine translation model to these language varieties, we can 
then evaluate the performance of NLP models after translation. This project is probably mainly
focused on (automatic) data creation/curation.


